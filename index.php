<?php 
require_once('config.php');
require_once( ROOT_PATH . '/functions.php') ;

//Retrieve all posts from database
$posts = getPublishedPosts(); 
require_once( ROOT_PATH . '/head_section.php') ;
if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();

?>


	<title>County Project Management System | Home </title>
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include( ROOT_PATH . '/navbar.php') ?>
		<!-- banner -->
		<?php include( ROOT_PATH . '/banner.php') ?>
		<br>
		<!-- Page content -->
		<div class="content">
			<div class="post-wrapper">
			<h2 class="content-title" style="text-align: center;">Welcome to Nairobi County Project Management System</h2><hr><br><br>
				<p style="text-align: left;font-size: 20px; ">The Nairobi County Project Management System(NCPMS) is a platform for monitoring the performance and implementation of development projects in Nairobi County. The NCPMS automates the collection, reporting, and analysis of data for Nairobi County projects.<br><br>				The Nairobi City County is the creation of the Constitution of Kenya 2010 and successor of the defunct City Council of Nairobi. It operates under the auspices of the Cities and Urban Areas Act, The Devolved Governments Act and a host of other Acts.

				The Nairobi City County is charged with the responsibility of providing a variety of services to residents within its area of jurisdiction. These include the services that were hitherto provided by the defunct City Council and the ones that have been transferred from the national government.<br><br>

				The former include Physical Planning, Public Health, Social Services and Housing, Primary Education Infrastructure, Inspectorate Services, Public Works, Environment Management while the latter include Agriculture, Livestock Development and Fisheries, Trade, Industrialization, Corporate Development, Tourism and Wildlife, Public Service Management.<br><br></p>
				<h3 class="content-title" style="text-align: center;">Vision</h3><hr>
				<p style="text-align: center;font-size: 20px; ">The City of Choice to invest, work and live in.</p><br><br>
				<h3 class="content-title" style="text-align: center;">Mission</h3>
				<p style="text-align: left;font-size: 20px; ">To provide affordable, accessible and sustainable quality services, enhancing community participation and creating a secure climate for political,social and economic development through the commitment of a motivated and dedicated team.</p><br><br>
				<h3 class="content-title" style="text-align: center;">Core Values</h3>
				<p style="text-align: left;font-size: 20px;">Accountability, transparency, excellence, accessibility, integrity, responsiveness, equity and team work.
				The Nairobi City County, in execution of responsibilities and functions bestowed upon it by the above Acts has been divided into three arms as follows:<br><br>

				1.The Executive led by The Governor<br>
				2.The Legislative Arm or the County Assembly headed by The Speaker<br>
				3.County Public Service Board<br>
				</p><br> 

				
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
			
			<!-- Add this ... -->
			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . $post['image']; ?>" class="post_image" alt="">

					<?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>


					<a href="single_posts.php?post-slug=<?php echo $post['slug']; ?>">
						<div class="post_info">
							<h3><?php echo $post['title'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								<span class="read_more">Read more...</span>
							</div>
						</div>
					</a>

				</div>
			<?php endforeach ?>
			<!-- more content still to come here ... -->
			
		</div>
		<div class="post-sidebar">
			<div class="card">
				<div class="card-header">
					<h2>Latest</h2>
				</div>
				<div class="card-content">
					<?php foreach ($topics as $topic): ?>
						<a 
							href="<?php echo 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> 
					<?php endforeach ?>
				</div>
			</div>
		</div>
		</div>
		<!-- // Page content -->

		<!-- footer -->
<?php include( ROOT_PATH . '/footer.php') ?>