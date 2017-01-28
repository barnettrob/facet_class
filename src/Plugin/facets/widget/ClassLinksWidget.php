<?php

namespace Drupal\facet_class\Plugin\facets\widget;

use Drupal\facets\Plugin\facets\widget\LinksWidget;
use Drupal\facets\Result\ResultInterface;

/**
 * The links widget.
 *
 * @FacetsWidget(
 *   id = "class_facet_links",
 *   label = @Translation("Class Facet List of links"),
 *   description = @Translation("A simple widget that shows a list of links with custom classes"),
 * )
 */
class ClassLinksWidget extends LinksWidget {
  public function buildListItems(ResultInterface $result) {
    $items =  parent::buildListItems($result);

    if ($result->isActive()) {
      $items['#attributes'] = ['class' => 'c-search-facets__facet-link is-active'];
    }
    else {
      $items['#attributes'] = ['class' => 'c-search-facets__facet-link'];
    }

    return $items;
  }
}
