-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the Contao    *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

--
-- Table `tl_metamodel_filtersetting`
--

CREATE TABLE `tl_metamodel_filtersetting` (
  `member_group` int(10) unsigned NOT NULL default '0',
  `no_member` char(1) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;