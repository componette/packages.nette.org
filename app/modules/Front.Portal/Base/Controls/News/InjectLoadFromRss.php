<?php declare (strict_types = 1);

namespace App\Modules\Front\Portal\Base\Controls\News;

trait InjectLoadFromRss
{

	protected LoadFromRss $loadFromRss;

	public function injectLoadFromRss(LoadFromRss $loadFromRss): void
	{
		$this->loadFromRss = $loadFromRss;
	}

}
