<?PHP
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/shan_Students/shan_Students_sugar.php');
class shan_Students extends shan_Students_sugar {

    /**
     * @deprecated Use __construct() instead
     */
    public function shan_Students()
    {
        self::__construct();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }
}