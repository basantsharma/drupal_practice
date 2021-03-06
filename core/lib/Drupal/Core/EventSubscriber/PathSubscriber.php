<?php

/**
 * @file
 * Contains \Drupal\Core\EventSubscriber\PathSubscriber.
 */

namespace Drupal\Core\EventSubscriber;

use Drupal\Core\Path\AliasManagerInterface;
use Drupal\Core\Path\CurrentPathStack;
use Drupal\Core\PathProcessor\InboundPathProcessorInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Provides a path subscriber that converts path aliases.
 */
class PathSubscriber implements EventSubscriberInterface {

  /**
   * The alias manager that caches alias lookups based on the request.
   *
   * @var \Drupal\Core\Path\AliasManagerInterface
   */
  protected $aliasManager;

  /**
   * A path processor manager for resolving the system path.
   *
   * @var \Drupal\Core\PathProcessor\InboundPathProcessorInterface
   */
  protected $pathProcessor;

  /**
   * The current path.
   *
   * @var \Drupal\Core\Path\CurrentPathStack
   */
  protected $currentPath;

  /**
   * Constructs a new PathSubscriber instance.
   *
   * @param \Drupal\Core\Path\AliasManagerInterface $alias_manager
   * @param \Drupal\Core\PathProcessor\InboundPathProcessorInterface $path_processor
   * @param \Drupal\Core\Path\CurrentPathStack $current_path
   *   The current path.
   */
  public function __construct(AliasManagerInterface $alias_manager, InboundPathProcessorInterface $path_processor, CurrentPathStack $current_path) {
    $this->aliasManager = $alias_manager;
    $this->pathProcessor = $path_processor;
    $this->currentPath = $current_path;
  }

  /**
   * Converts the request path to a system path.
   *
   * @param Symfony\Component\HttpKernel\Event\GetResponseEvent $event
   *   The Event to process.
   */
  public function onKernelRequestConvertPath(GetResponseEvent $event) {
    $request = $event->getRequest();
    $path = trim($request->getPathInfo(), '/');
    $path = $this->pathProcessor->processInbound($path, $request);
    $this->currentPath->setPath('/' . $path, $request);

    // Set the cache key on the alias manager cache decorator.
    if ($event->getRequestType() == HttpKernelInterface::MASTER_REQUEST) {
      $this->aliasManager->setCacheKey($path);
    }
  }

  /**
   * Ensures system paths for the request get cached.
   */
  public function onKernelTerminate(PostResponseEvent $event) {
    $this->aliasManager->writeCache();
  }

  /**
   * Registers the methods in this class that should be listeners.
   *
   * @return array
   *   An array of event listener definitions.
   */
  static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = array('onKernelRequestConvertPath', 200);
    $events[KernelEvents::TERMINATE][] = array('onKernelTerminate', 200);
    return $events;
  }
}
