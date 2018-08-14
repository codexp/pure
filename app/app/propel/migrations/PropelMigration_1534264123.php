<?php

use Propel\Generator\Manager\MigrationManager;

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1534264123.
 * Generated on 2018-08-14 18:28:43 by root
 */
class PropelMigration_1534264123
{
    public $comment = 'create lexicon table';

    public function preUp(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postUp(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    public function preDown(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postDown(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array(
            'default' => /** @lang MySQL */
            '
                # This is a fix for InnoDB in MySQL >= 4.1.x
                # It "suspends judgement" for fkey relationships until are tables are set.
                SET FOREIGN_KEY_CHECKS = 0;
                
                CREATE TABLE `lexicon`
                (
                    `id` INTEGER NOT NULL AUTO_INCREMENT,
                    `entry` VARCHAR(100),
                    `description` TEXT,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB;
                
                # This restores the fkey checks, after having unset them earlier
                SET FOREIGN_KEY_CHECKS = 1;
            ',
        );
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array(
            'default' => /** @lang MySQL */
            '
                # This is a fix for InnoDB in MySQL >= 4.1.x
                # It "suspends judgement" for fkey relationships until are tables are set.
                SET FOREIGN_KEY_CHECKS = 0;
                
                DROP TABLE IF EXISTS `lexicon`;
                
                # This restores the fkey checks, after having unset them earlier
                SET FOREIGN_KEY_CHECKS = 1;
            ',
        );
    }
}
