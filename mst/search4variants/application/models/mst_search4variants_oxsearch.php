<?php

class mst_search4variants_oxsearch extends mst_search4variants_oxsearch_parent

{

    protected function _getSearchSelect($sSearchParamForQuery = false, $sInitialSearchCat = false, $sInitialSearchVendor = false, $sInitialSearchManufacturer = false, $sSortBy = false)
    {
        $r = parent::_getSearchSelect($sSearchParamForQuery, $sInitialSearchCat, $sInitialSearchVendor, $sInitialSearchManufacturer, $sSortBy);

        $oArticle      = oxNew('oxarticle');
        $sArticleTable = $oArticle->getViewName();
        $search        = " and {$sArticleTable}.oxparentid = '' ";
        $replace       = " and 1 ";
        return str_replace($search, $replace, $r);
    }
}
