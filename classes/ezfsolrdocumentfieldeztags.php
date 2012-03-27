<?php

/**
 * ezfSolrDocumentFieldeZTags class implements custom indexing
 * handler for eZ Find
 *
 */
class ezfSolrDocumentFieldeZTags extends ezfSolrDocumentFieldBase
{
    /**
     * Returns the data from content object attribute which is sent to Solr backend
     *
     * @return array
     */
    public function getData()
    {
        $data = array();

        $contentObjectAttribute = $this->ContentObjectAttribute;
        $contentClassAttribute = $contentObjectAttribute->contentClassAttribute();

        $keywordFieldName = parent::generateAttributeFieldName( $contentClassAttribute, 'lckeyword' );
        $textFieldName = parent::generateAttributeFieldName( $contentClassAttribute, 'text' );
        $tagIDsFieldName = parent::generateSubattributeFieldName( $contentClassAttribute, 'tag_ids', 'sint' );

        $data[$keywordFieldName] = '';
        $data[$textFieldName] = '';
        $data[$tagIDsFieldName] = array();

        if ( $contentObjectAttribute->hasContent() )
        {
            $objectAttributeContent = $contentObjectAttribute->content();

            $keywordString = $objectAttributeContent->keywordString( ', ' );
            $textString = $objectAttributeContent->keywordString( ' ' );
            $tagIDs = $objectAttributeContent->attribute( 'tag_ids' );

            $data[$keywordFieldName] = $keywordString;
            $data[$textFieldName] = $textString;
            $data[$tagIDsFieldName] = $tagIDs;

            $data['ezf_df_tag_ids'] = $tagIDs;
            $data['ezf_df_tags'] = $objectAttributeContent->attribute( 'keywords' );
        }

        return $data;
    }

    /**
     * Returns the list of field names this handler sends to Solr backend
     *
     * @static
     * @param eZContentClassAttribute $classAttribute
     * @param array $exclusiveTypeFilter
     * @return array
     */
    public static function getFieldNameList( eZContentClassAttribute $classAttribute, $exclusiveTypeFilter = array() )
    {
        $fieldsList = array();

        if ( empty( $exclusiveTypeFilter ) || !in_array( 'lckeyword', $exclusiveTypeFilter ) )
            $fieldsList[] = parent::generateAttributeFieldName( $classAttribute, 'lckeyword' );

        if ( empty( $exclusiveTypeFilter ) || !in_array( 'text', $exclusiveTypeFilter ) )
            $fieldsList[] = parent::generateAttributeFieldName( $classAttribute, 'text' );

        if ( empty( $exclusiveTypeFilter ) || !in_array( 'sint', $exclusiveTypeFilter ) )
            $fieldsList[] = parent::generateSubattributeFieldName( $classAttribute, 'tag_ids', 'sint' );

        return $fieldsList;
    }
}

?>