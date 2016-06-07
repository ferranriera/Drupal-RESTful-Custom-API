<?php
/**
 *
 */

namespace Drupal\restful_custom_api\Plugin\resource\entity\node\issue;
use Drupal\restful\Http\RequestInterface;
use Drupal\restful\Plugin\resource\ResourceInterface;
use Drupal\restful\Plugin\resource\ResourceNode;

/**
 * Class Issue__1_0
 * @package Drupal\restful_custom_api\Plugin\resource\entity\node\issue
 *
 * @Resource(
 *   name = "issues:1.0",
 *   resource = "issues",
 *   label = "Issues",
 *   description = "Export the issue content type.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *       "issue"
 *     },
 *   },
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Issues__1_0 extends ResourceNode implements ResourceInterface {
  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    $public_fields['field_body'] = [
      'property' => 'field_body',
      'sub_property' => 'value',
      'methods' => [
            RequestInterface::METHOD_GET,
            RequestInterface::METHOD_POST,
      ],
    ];
    
    return $public_fields;
  }
}