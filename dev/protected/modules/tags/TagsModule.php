<?php

class TagsModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'application.modules.tags.behaviors.taggable.',
			'tags.components.*',
		));
	}

	public static function register () {
		self::_addUrlRules();
		self::_addBehaviors();
	}

	protected static function _addBehaviors () {
		Yii::app()->pd->registerBehavior('modules\torrents\models\Torrent', [
		        'tags' => [
		            'class' => 'application.modules.tags.behaviors.taggable.ETaggableBehavior',
		            'modelTableName' => 'modules_torrents_models_Torrent',
		            'cacheID' => 'cache',
		            'createTagsAutomatically' => true,
		        ]
		    ]
		);

		Yii::app()->pd->registerBehavior('modules\torrents\models\TorrentGroup', [
		        'tags' => [
		            'class' => 'application.modules.tags.behaviors.taggable.ETaggableBehavior',
		            'modelTableName' => 'modules_torrents_models_TorrentGroup',
		            'cacheID' => 'cache',
		            'createTagsAutomatically' => true,
		        ]
		    ]
		);

		Yii::app()->pd->registerBehavior('modules\blogs\models\BlogPost', [
		        'tags' => [
		            'class' => 'application.modules.tags.behaviors.taggable.ETaggableBehavior',
		            'modelTableName' => 'BlogPost',
		            'cacheID' => 'cache',
		            'createTagsAutomatically' => true,
		        ]
		    ]
		);
	}

	protected static function _addUrlRules () {
		/*Yii::app()->pd->addUrlRules(array(
		                                 'tags/<action:\w+>/*' => 'tags/default/<action>',
		                                 'tags/<controller:\w+>/<action:\w+>/*' => 'tags/<controller>/<action>',
		                            ));*/
	}
}
