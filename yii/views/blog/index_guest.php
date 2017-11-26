<?php

use yii\helpers\Url;
use app\components\CustomHelper;

$this->title = "Blog";
$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['index']];

$c = $this->context->id;
$a = $this->context->action->id;
?>
<section id="blog">
	<div class="content-wrap">
		<div class="container clearfix" id="blogsection">

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin clearfix">

				<?php if (isset($posts) && count($posts) > 0): ?>
					<?php foreach ($posts as $v):

					$comments = \yii::$app->db->createCommand("SELECT bc.*, u.UserID, u.nama FROM blog_comment bc INNER JOIN users u ON bc.username = u.Username WHERE bc.id_blog_post = ".$v['id'])->queryAll();

					?>
					<!-- Posts
					-->
					<div class="entry clearfix">
						<div id="posts" class="small-thumbs alt">
							<?php if (isset($v['picture']) && strlen($v['picture']) > 0): ?>
							<div class="entry-image">
								<img src="<?= Url::base().'/'.$v['picture'] ?>" style="max-width:640px;max-height:480px;display:inline">
							</div>
							<?php endif; ?>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="<?= Url::to(['blog/post', 'slug' => $v['slug']]) ?>"><?= htmlentities($v['title']) ?></a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i><?= CustomHelper::formatDatetime($v['date']) ?></li>
									<li><i class="icon-user"></i><span><?= htmlentities($v['nama']) ?></span></li>
									<li><a href="<?= Url::to(['blog/category', 'id' => $v['id_category']]) ?>"><i class="icon-folder-open"></i><?= htmlentities($v['category']) ?></a></li>
									<li><i class="icon-comments"></i><?= count($comments) ?> komentar</li>
								</ul>
								<div class="entry-content">
									<?= $v['content'] ?>
									<a href="<?= Url::to(['blog/post', 'slug' => $v['slug']]) ?>" class="more-link"><span class="fa fa-list"></span> Baca Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
					<!-- .post end -->

					<?php endforeach; ?>
				<?php else: ?>
            		<div class="alert alert-warning"> Blog tidak ditemukan</div>
            	<?php endif; ?>

            	<!-- Pagination
				============================================= -->
				<ul class="pager nomargin">
					<?php if (count($posts) > 0 && $page < ceil($count / 4)): ?>
					<li class="next">
						<a href="<?= Url::to(['blog/index', 'page' => ($page+1)]) ?>">Halaman Selanjutnya →</a>
					</li>
					<?php endif; ?>
					<?php if ($count > 0 && $page > 1): ?>
					<li class="previous">
						<a href="<?= Url::to(['blog/index', 'page' => ($page-1)]) ?>">← Halaman Sebelumnya</a>
					</li>
					<?php endif; ?>
				</ul>
				<!-- .pager end -->

			</div>
			<!-- .postcontent end -->
            

			<!-- Sidebar
			============================================= -->
			<div class="sidebar nobottommargin col_last clearfix">
				<?= $this->render('sidebar_guest') ?>
			</div>
			<!-- .sidebar end -->
		</div>
	</div>
</section>