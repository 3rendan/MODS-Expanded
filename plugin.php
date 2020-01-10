<?php
define('MODS_PLUGIN_VERSION', get_plugin_ini('MODS', 'version'));

add_plugin_hook('install', 'MODSPlugin::install');
add_plugin_hook('uninstall', 'MODSPlugin::uninstall');

class MODSPlugin
{
    private $_db;
    private $_elements;
    
    public function __construct()
    {
        $this->_db = get_db();
        $this->_setElements();
    }

    public static function install()
    {
        set_option('mods_plugin_version', 
                   MODS_PLUGIN_VERSION);

        $elementSetMetadata = array( 'name' => 'MODS', 
                                     'description' => 'Based on the MODS template at BPL/ Digital Commonwealth');
        
        $mods = new MODSPlugin;
        insert_element_set($elementSetMetadata, $mods->getElements());
    }
    
    public static function uninstall()
    {
        delete_option('mods_plugin_version');
        
        $mods = new MODSPlugin;
        $mods->_deleteElementSet();
    }

    public function getElements()
    {
        return $this->_elements;
    }
    
    private function _setElements()
    {
        include 'elements.php';
        $this->_elements = $elements;
    }
    
// ---------------------------------------------------------------- //
    
    private function _addElements()
    {
        
        // Add the new elements to the Dublin Core element set. 
        $elementSet = $this->_getElementSet();
        
        // Iterate through the elements.
        foreach ($this->_elements as $key => $element) {
        
            $e = new Element;
            $e->record_type_id = $this->_getRecordTypeId('Item');
            $e->data_type_id   = $this->_getDataTypeId($element['data_type']);
            $e->element_set_id = $elementSet->id;
            $e->name           = $element['name'];
            $e->description    = $element['description'];

            $e->order = $key + 1;
            $e->save();
        }
    }
    
    private function _deleteElementSet()
    {
        $mods_element_set = $this->_db->getTable('ElementSet')->findByName('MODS');
        if (isset($mods_element_set)) {
            $sql = "DELETE FROM `{$this->_db->prefix}elements` WHERE ELEMENT_SET_ID = ( ? )";
            $this->_db->query($sql, $mods_element_set->id);
            $sql = "DELETE FROM `{$this->_db->prefix}element_sets` WHERE ID = ( ? )";
            $this->_db->query($sql, $mods_element_set->id);
        }
    }

    private function _getElementSet()
    {
        return $this->_db->getTable('ElementSet')->findByName('MODS');
    }
    
    private function _getElement($elementName)
    {
        return $this->_db
                    ->getTable('Element')
                    ->findByElementSetNameAndElementName('MODS', $elementName);
    }
    
    private function _getRecordTypeId($recordTypeName)
    {
        return $this->_db->getTable('RecordType')->findIdFromName($recordTypeName);
    }
    
    private function _getDataTypeId($dataTypeName)
    {
        return $this->_db->getTable('DataType')->findIdFromName($dataTypeName);
    }
    
}
