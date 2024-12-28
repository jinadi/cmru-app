<?php
	/**
	* CMRU- Computer Maintenance and Repair Unit - DCS
	* Version: 1.0
	* Author: JK Dahanayaka - DCS 2024-12-25 
	* Copyright (c) 2024, JK Dahanayaka. All Rights Reserved. 
	*/

?>

	<ul class="nav nav-list">
		<li class="" id="dashboard">
			<a href="<?php echo base_url('home'); ?>">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text"> Dashboard </span>
			</a>	
		</li>
		
		<li class="open">
			<a href="<?php echo base_url('officers/add'); ?>">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text"> Officers </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="" id="addofficer">
					<a href="<?php echo base_url('officers/add'); ?>">
						<i class="menu-icon fa fa-certificate"></i>
						<span class="menu-text"> Add Officers </span>
					</a>	
				</li>
				<li class="" id="editofficer">
					<a href="<?php echo base_url('officers/edit'); ?>">
						<i class="menu-icon fa fa-certificate"></i>
						<span class="menu-text"> Edit / Delete Officers </span>
					</a>	
				</li>	
			</ul>
		</li>
		
		<li class="open">
			<a href="#">
				<i class="menu-icon fa fa-keyboard-o"></i>
				<span class="menu-text"> Items </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="" id="additem">
					<a href="<?php echo base_url('items/add'); ?>">
						<i class="menu-icon fa fa-certificate"></i>
						<span class="menu-text"> Add Items </span>
					</a>	
				</li>
				<li class="" id="edititem">
					<a href="<?php echo base_url('items/edit'); ?>">
						<i class="menu-icon fa fa-certificate"></i>
						<span class="menu-text"> Edit / Delete Items </span>
					</a>	
				</li>	
			</ul>
		</li>
		
		<li class="open">
			<a href="#">
				<i class="menu-icon fa fa-plug"></i>
				<span class="menu-text"> Assign Items </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="" id="basicinfosec1">
					<a href="<?php echo base_url('index.php/basicinfo/sec1'); ?>">
						<i class="menu-icon fa fa-certificate"></i>
						<span class="menu-text"> Assign </span>
					</a>	
				</li>
				<li class="" id="basicinfosec2">
					<a href="<?php echo base_url('index.php/basicinfo/sec2'); ?>">
						<i class="menu-icon fa fa-certificate"></i>
						<span class="menu-text"> Edit / Delete Assignment </span>
					</a>	
				</li>	
			</ul>
		</li>

		
	</ul><!-- /.nav-list -->
	<p style="margin-top: 20px; padding: 0 10px; color: #fff;">
		<br>Contact : CMRU
		<br>011-214 7442
		<br><!--<a href="mailto:statbmoe2022@gmail.com">statbbranch2023@gmail.com</a>-->
		<br><br>
	</p>
				