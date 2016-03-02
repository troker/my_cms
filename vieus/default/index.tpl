{forEach $rsProducts as $item name=productes}
	<div style="float: left; padding: 0px 30px 40px 0px;">
		<a href="/product/{$item['id']}/">
			<img src="/images/products/{$item['image']}" width="100">
		</a><br>
		<a href="/product/{$item['id']}/">{$item['name']}</a>
	</div>
{/forEach}
//asdasd