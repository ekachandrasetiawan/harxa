<?php

class m140823_005902_pages_insert extends CDbMigration
{
	public function safeUp()
	{
		$this->insert('tbl_pages',array(
			'id'=>1,
			'title'=>'home',
			'content'=>'<p class="judul">WELCOME TO OUR ONLINE STORE\t</p><p style="margin-left: 10px; line-height: 25px;" class="description">\r\n                Lorem ipsum dolor sit amet conse ctetur addpisincing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliwua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat\r\n                Lorem ipsum dolor sit amet conse ctetur addpisincing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliwua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat\r\n                Lorem ipsum dolor sit amet conse ctetur addpisincing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliwua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat\r\n</p>',
			'tags'=>'Welcome,Harxa,fashion',
		));


		$this->insert('tbl_pages',array(
			'id'=>2,
			'title'=>'profile',
			'content'=>'<div class="row">\r\n\t\t    <div class="span12">\r\n\t\t\t\t    <h2>About Us</h2>\r\n\t\t\t\t\t<p class="text_about">At mea expetendis percipitur, error doctus argumentum ex qui, officiis adipiscing signiferumque te eam. At quodsi civibus vis, his ad dicat minim appetere, omnes principes ex mel. Ex liber audire maiestatis mel, no nam mandamus omittantur. Ad vim illud utroque. Ex vim inani volumus, everti admodum appareat an usu, propriae vivendum et sea.</p>\r\n\t\t\t</div>\r\n\t\t</div>\r\n\r\n<div class="row">\r\n            <ul class="row-fluid clearfix rr grid-display">\r\n                <li class="span4 alpha33 desat">\r\n                   <img alt="" class="desat-ie" src="/sis/harxa/themes/front/assets/image/profile/banner1.jpg">\r\n                </li>\r\n                <li class="span4 alpha33 desat">\r\n                   <img alt="" class="desat-ie" src="/sis/harxa/themes/front/assets/image/profile/banner2.jpg">\r\n                </li>\r\n                <li class="span4 alpha33 desat">\r\n                   <img alt="" class="desat-ie" src="/sis/harxa/themes/front/assets/image/profile/banner3.jpg">\r\n                </li>\r\n        </ul>\r\n\t\t</div>\r\n<div class="row">\r\n\t\t    <div class="span4">\r\n\t\t\t    <div class="description">\r\n\t\t\t    <h4>Aenean imperdiet</h4>\r\n\t\t\t    <p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>\r\n\t\t\t\t<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>\r\n\t\t\t\t</div>\r\n\t\t\t</div>\r\n\t\t    <div class="span4">\r\n\t\t\t    <div class="description">\r\n\t\t\t    <h4>Donec quam felis</h4>\r\n\t\t\t    <p>Id eum autem ubique persecuti, ocurreret posidonium pri no. Essent virtute has ne, duo suas discere at. Fierent appellantur cu eos, adolescens quaerendum ne duo. Tantas oporteat facilisis sed in, apeirian singulis contentiones vix ex, vim an novum semper.</p>\r\n\t\t\t\t<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut.</p>\r\n\t\t\t\t</div>\r\n\t\t\t</div>\r\n\t\t    <div class="span4">\r\n\t\t\t\t<div class="description">\r\n\t\t\t    <h4>In enim justo</h4>\r\n\t\t\t    <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>\r\n\t\t\t\t<p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>\r\n\t\t\t\t</div>\r\n\t\t\t</div>\t\t    \r\n\t\t\r\n\t\t</div>',
			'tags'=>'Profile,Harxa,fashion',
		));

		$this->insert('tbl_pages',array(
			'id'=>3,
			'title'=>'trunkshow',
			'content'=>'<p class="row">\r\n</p>\r\n<h2>Trunk Show</h2>\r\n<p class="text_about">\r\n\t\tAt mea expetendis percipitur, error doctus argumentum ex qui, officiis adipiscing signiferumque te eam. At quodsi civibus vis, his ad dicat minim appetere, omnes principes ex mel. Ex liber audire maiestatis mel, no nam mandamus omittantur. Ad vim illud utroque. Ex vim inani volumus, everti admodum appareat an usu, propriae vivendum et sea.\r\n</p>\r\n<p class="row">\r\n</p>\r\n<ul class="row-fluid clearfix rr grid-display">\r\n\t<li class="span4 alpha33 desat">\r\n\t<img alt="" class="desat-ie" src="/sis/harxa/themes/front/assets/image/profile/banner1.jpg">\r\n\t</li>\r\n\t<li class="span4 alpha33 desat">\r\n\t<img alt="" class="desat-ie" src="/sis/harxa/themes/front/assets/image/profile/banner2.jpg">\r\n\t</li>\r\n\t<li class="span4 alpha33 desat">\r\n\t<img alt="" class="desat-ie" src="/sis/harxa/themes/front/assets/image/profile/banner3.jpg">\r\n\t</li>\r\n</ul>\r\n<p class="row">\r\n</p>\r\n<p class="span4">\r\n</p>\r\n<p class="description">\r\n</p>\r\n<h4>Aenean imperdiet</h4>\r\n<p>\r\n\t\t\tAenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.\r\n</p>\r\n<p>\r\n\t\t\tDonec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.\r\n</p>\r\n<p class="span4">\r\n</p>\r\n<p class="description">\r\n</p>\r\n<h4>Donec quam felis</h4>\r\n<p>\r\n\t\t\tId eum autem ubique persecuti, ocurreret posidonium pri no. Essent virtute has ne, duo suas discere at. Fierent appellantur cu eos, adolescens quaerendum ne duo. Tantas oporteat facilisis sed in, apeirian singulis contentiones vix ex, vim an novum semper.\r\n</p>\r\n<p>\r\n\t\t\tDonec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut.\r\n</p>\r\n<p class="span4">\r\n</p>\r\n<p class="description">\r\n</p>\r\n<h4>In enim justo</h4>\r\n<p>\r\n\t\t\tIn enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.\r\n</p>\r\n<p>\r\n\t\t\tDonec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.\r\n</p>',
			'tags'=>'Trunkshow,trunk,show,Harxa,fashion',
		));
	}

	public function down()
	{
		echo "m140823_005902_pages_insert does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}