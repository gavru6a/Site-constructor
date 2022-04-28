<?php
class Base {
	public static function TakeClass ($class) {
		if (file_exists(ROOT . "classes/$class.class.php")) {
			require_once (ROOT . "classes/$class.class.php");
			return true;
		}
		return false;
	}

	public static function TakeTPL ($tpl) {
		if (file_exists(ROOT . "tpl/$tpl.html")) {
			include(ROOT . "tpl/$tpl.html");
			return true;
		}
		return false;
	}

	public static function PathTPL ($tpl) {
		if (file_exists(ROOT . "tpl/$tpl.html")) {
			return (ROOT . "tpl/$tpl.html");
		}
		return false;
	}
	public static function GeneratePagination($page, $amount_by_page, $total_amount, $link) {
		if ($amount_by_page >= $total_amount) return '';
		ob_start();
		self::TakeTPL("pagination/pagin_start");
		$pages_count = (int) ($total_amount / $amount_by_page + 1);
		if ($page <= 5){
			for ($p = 1; $p < $page; $p++){
				$l = $link . $p;
				include Base::PathTPL("pagination/pagin_item_inactive");
			}
		} else {
			$p = "&laquo;";
			$l = $link . 1;
			include Base::PathTPL("pagination/pagin_item_inactive");
			for ($p = $page - 3; $p < $page; $p++){
				$l = $link . $p;
				include Base::PathTPL("pagination/pagin_item_inactive");
			}
		}
		$p = $page;
		$l = $link . $page;
		include Base::PathTPL("pagination/pagin_item_active");
		if ($pages_count - $page <= 5){
			for ($p = $page + 1; $p <= $pages_count; $p++){
				$l = $link . $p;
				include Base::PathTPL("pagination/pagin_item_inactive");
			}
		} else {
			for ($p = $page + 1; $p <= $page + 3; $p++){
				$l = $link . $p;
				include Base::PathTPL("pagination/pagin_item_inactive");
			}
			$p = "&raquo;";
			$l = $link . $pages_count;
			include Base::PathTPL("pagination/pagin_item_inactive");
		}
		self::TakeTPL("pagination/pagin_end");
		return ob_get_clean();
	}
}