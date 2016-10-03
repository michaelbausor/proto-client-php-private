<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/spanner/v1/query_plan.proto
//   Date: 2016-09-19 21:10:26

namespace google\spanner\v1\PlanNode {

  class Kind extends \DrSlump\Protobuf\Enum {
    const KIND_UNSPECIFIED = 0;
    const RELATIONAL = 1;
    const SCALAR = 2;
  }
}
namespace google\spanner\v1\PlanNode {

  class ChildLink extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $child_index = null;
    
    /**  @var string */
    public $type = null;
    
    /**  @var string */
    public $variable = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.PlanNode.ChildLink');

      // OPTIONAL INT32 child_index = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "child_index";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING variable = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "variable";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <child_index> has a value
     *
     * @return boolean
     */
    public function hasChildIndex(){
      return $this->_has(1);
    }
    
    /**
     * Clear <child_index> value
     *
     * @return \google\spanner\v1\PlanNode\ChildLink
     */
    public function clearChildIndex(){
      return $this->_clear(1);
    }
    
    /**
     * Get <child_index> value
     *
     * @return int
     */
    public function getChildIndex(){
      return $this->_get(1);
    }
    
    /**
     * Set <child_index> value
     *
     * @param int $value
     * @return \google\spanner\v1\PlanNode\ChildLink
     */
    public function setChildIndex( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <type> value
     *
     * @return \google\spanner\v1\PlanNode\ChildLink
     */
    public function clearType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <type> value
     *
     * @return string
     */
    public function getType(){
      return $this->_get(2);
    }
    
    /**
     * Set <type> value
     *
     * @param string $value
     * @return \google\spanner\v1\PlanNode\ChildLink
     */
    public function setType( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <variable> has a value
     *
     * @return boolean
     */
    public function hasVariable(){
      return $this->_has(3);
    }
    
    /**
     * Clear <variable> value
     *
     * @return \google\spanner\v1\PlanNode\ChildLink
     */
    public function clearVariable(){
      return $this->_clear(3);
    }
    
    /**
     * Get <variable> value
     *
     * @return string
     */
    public function getVariable(){
      return $this->_get(3);
    }
    
    /**
     * Set <variable> value
     *
     * @param string $value
     * @return \google\spanner\v1\PlanNode\ChildLink
     */
    public function setVariable( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\spanner\v1\PlanNode\ShortRepresentation {

  class SubqueriesEntry extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $key = null;
    
    /**  @var int */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.PlanNode.ShortRepresentation.SubqueriesEntry');

      // OPTIONAL STRING key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "key";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <key> has a value
     *
     * @return boolean
     */
    public function hasKey(){
      return $this->_has(1);
    }
    
    /**
     * Clear <key> value
     *
     * @return \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry
     */
    public function clearKey(){
      return $this->_clear(1);
    }
    
    /**
     * Get <key> value
     *
     * @return string
     */
    public function getKey(){
      return $this->_get(1);
    }
    
    /**
     * Set <key> value
     *
     * @param string $value
     * @return \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry
     */
    public function setKey( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return int
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param int $value
     * @return \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry
     */
    public function setValue( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\spanner\v1\PlanNode {

  class ShortRepresentation extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $description = null;
    
    /**  @var \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry[]  */
    public $subqueries = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.PlanNode.ShortRepresentation');

      // OPTIONAL STRING description = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE subqueries = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "subqueries";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(1);
    }
    
    /**
     * Clear <description> value
     *
     * @return \google\spanner\v1\PlanNode\ShortRepresentation
     */
    public function clearDescription(){
      return $this->_clear(1);
    }
    
    /**
     * Get <description> value
     *
     * @return string
     */
    public function getDescription(){
      return $this->_get(1);
    }
    
    /**
     * Set <description> value
     *
     * @param string $value
     * @return \google\spanner\v1\PlanNode\ShortRepresentation
     */
    public function setDescription( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <subqueries> has a value
     *
     * @return boolean
     */
    public function hasSubqueries(){
      return $this->_has(2);
    }
    
    /**
     * Clear <subqueries> value
     *
     * @return \google\spanner\v1\PlanNode\ShortRepresentation
     */
    public function clearSubqueries(){
      return $this->_clear(2);
    }
    
    /**
     * Get <subqueries> value
     *
     * @param int $idx
     * @return \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry
     */
    public function getSubqueries($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <subqueries> value
     *
     * @param \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry $value
     * @return \google\spanner\v1\PlanNode\ShortRepresentation
     */
    public function setSubqueries(\google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <subqueries>
     *
     * @return \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry[]
     */
    public function getSubqueriesList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <subqueries>
     *
     * @param \google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry $value
     * @return \google\spanner\v1\PlanNode\ShortRepresentation
     */
    public function addSubqueries(\google\spanner\v1\PlanNode\ShortRepresentation\SubqueriesEntry $value){
     return $this->_add(2, $value);
    }
  }
}

namespace google\spanner\v1 {

  class PlanNode extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $index = null;
    
    /**  @var int - \google\spanner\v1\PlanNode\Kind */
    public $kind = null;
    
    /**  @var string */
    public $display_name = null;
    
    /**  @var \google\spanner\v1\PlanNode\ChildLink[]  */
    public $child_links = array();
    
    /**  @var \google\spanner\v1\PlanNode\ShortRepresentation */
    public $short_representation = null;
    
    /**  @var \google\protobuf\Struct */
    public $metadata = null;
    
    /**  @var \google\protobuf\Struct */
    public $execution_stats = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.PlanNode');

      // OPTIONAL INT32 index = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "index";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM kind = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "kind";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\PlanNode\Kind';
      $descriptor->addField($f);

      // OPTIONAL STRING display_name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "display_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE child_links = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "child_links";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\spanner\v1\PlanNode\ChildLink';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE short_representation = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "short_representation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\spanner\v1\PlanNode\ShortRepresentation';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE metadata = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "metadata";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Struct';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE execution_stats = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "execution_stats";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Struct';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <index> has a value
     *
     * @return boolean
     */
    public function hasIndex(){
      return $this->_has(1);
    }
    
    /**
     * Clear <index> value
     *
     * @return \google\spanner\v1\PlanNode
     */
    public function clearIndex(){
      return $this->_clear(1);
    }
    
    /**
     * Get <index> value
     *
     * @return int
     */
    public function getIndex(){
      return $this->_get(1);
    }
    
    /**
     * Set <index> value
     *
     * @param int $value
     * @return \google\spanner\v1\PlanNode
     */
    public function setIndex( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <kind> has a value
     *
     * @return boolean
     */
    public function hasKind(){
      return $this->_has(2);
    }
    
    /**
     * Clear <kind> value
     *
     * @return \google\spanner\v1\PlanNode
     */
    public function clearKind(){
      return $this->_clear(2);
    }
    
    /**
     * Get <kind> value
     *
     * @return int - \google\spanner\v1\PlanNode\Kind
     */
    public function getKind(){
      return $this->_get(2);
    }
    
    /**
     * Set <kind> value
     *
     * @param int - \google\spanner\v1\PlanNode\Kind $value
     * @return \google\spanner\v1\PlanNode
     */
    public function setKind( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <display_name> has a value
     *
     * @return boolean
     */
    public function hasDisplayName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <display_name> value
     *
     * @return \google\spanner\v1\PlanNode
     */
    public function clearDisplayName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <display_name> value
     *
     * @return string
     */
    public function getDisplayName(){
      return $this->_get(3);
    }
    
    /**
     * Set <display_name> value
     *
     * @param string $value
     * @return \google\spanner\v1\PlanNode
     */
    public function setDisplayName( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <child_links> has a value
     *
     * @return boolean
     */
    public function hasChildLinks(){
      return $this->_has(4);
    }
    
    /**
     * Clear <child_links> value
     *
     * @return \google\spanner\v1\PlanNode
     */
    public function clearChildLinks(){
      return $this->_clear(4);
    }
    
    /**
     * Get <child_links> value
     *
     * @param int $idx
     * @return \google\spanner\v1\PlanNode\ChildLink
     */
    public function getChildLinks($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <child_links> value
     *
     * @param \google\spanner\v1\PlanNode\ChildLink $value
     * @return \google\spanner\v1\PlanNode
     */
    public function setChildLinks(\google\spanner\v1\PlanNode\ChildLink $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <child_links>
     *
     * @return \google\spanner\v1\PlanNode\ChildLink[]
     */
    public function getChildLinksList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <child_links>
     *
     * @param \google\spanner\v1\PlanNode\ChildLink $value
     * @return \google\spanner\v1\PlanNode
     */
    public function addChildLinks(\google\spanner\v1\PlanNode\ChildLink $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <short_representation> has a value
     *
     * @return boolean
     */
    public function hasShortRepresentation(){
      return $this->_has(5);
    }
    
    /**
     * Clear <short_representation> value
     *
     * @return \google\spanner\v1\PlanNode
     */
    public function clearShortRepresentation(){
      return $this->_clear(5);
    }
    
    /**
     * Get <short_representation> value
     *
     * @return \google\spanner\v1\PlanNode\ShortRepresentation
     */
    public function getShortRepresentation(){
      return $this->_get(5);
    }
    
    /**
     * Set <short_representation> value
     *
     * @param \google\spanner\v1\PlanNode\ShortRepresentation $value
     * @return \google\spanner\v1\PlanNode
     */
    public function setShortRepresentation(\google\spanner\v1\PlanNode\ShortRepresentation $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <metadata> has a value
     *
     * @return boolean
     */
    public function hasMetadata(){
      return $this->_has(6);
    }
    
    /**
     * Clear <metadata> value
     *
     * @return \google\spanner\v1\PlanNode
     */
    public function clearMetadata(){
      return $this->_clear(6);
    }
    
    /**
     * Get <metadata> value
     *
     * @return \google\protobuf\Struct
     */
    public function getMetadata(){
      return $this->_get(6);
    }
    
    /**
     * Set <metadata> value
     *
     * @param \google\protobuf\Struct $value
     * @return \google\spanner\v1\PlanNode
     */
    public function setMetadata(\google\protobuf\Struct $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <execution_stats> has a value
     *
     * @return boolean
     */
    public function hasExecutionStats(){
      return $this->_has(7);
    }
    
    /**
     * Clear <execution_stats> value
     *
     * @return \google\spanner\v1\PlanNode
     */
    public function clearExecutionStats(){
      return $this->_clear(7);
    }
    
    /**
     * Get <execution_stats> value
     *
     * @return \google\protobuf\Struct
     */
    public function getExecutionStats(){
      return $this->_get(7);
    }
    
    /**
     * Set <execution_stats> value
     *
     * @param \google\protobuf\Struct $value
     * @return \google\spanner\v1\PlanNode
     */
    public function setExecutionStats(\google\protobuf\Struct $value){
      return $this->_set(7, $value);
    }
  }
}

namespace google\spanner\v1 {

  class QueryPlan extends \DrSlump\Protobuf\Message {

    /**  @var \google\spanner\v1\PlanNode[]  */
    public $plan_nodes = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.spanner.v1.QueryPlan');

      // REPEATED MESSAGE plan_nodes = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "plan_nodes";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\spanner\v1\PlanNode';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <plan_nodes> has a value
     *
     * @return boolean
     */
    public function hasPlanNodes(){
      return $this->_has(1);
    }
    
    /**
     * Clear <plan_nodes> value
     *
     * @return \google\spanner\v1\QueryPlan
     */
    public function clearPlanNodes(){
      return $this->_clear(1);
    }
    
    /**
     * Get <plan_nodes> value
     *
     * @param int $idx
     * @return \google\spanner\v1\PlanNode
     */
    public function getPlanNodes($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <plan_nodes> value
     *
     * @param \google\spanner\v1\PlanNode $value
     * @return \google\spanner\v1\QueryPlan
     */
    public function setPlanNodes(\google\spanner\v1\PlanNode $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <plan_nodes>
     *
     * @return \google\spanner\v1\PlanNode[]
     */
    public function getPlanNodesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <plan_nodes>
     *
     * @param \google\spanner\v1\PlanNode $value
     * @return \google\spanner\v1\QueryPlan
     */
    public function addPlanNodes(\google\spanner\v1\PlanNode $value){
     return $this->_add(1, $value);
    }
  }
}

