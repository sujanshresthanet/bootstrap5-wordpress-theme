<?php
$cards = get_sub_field('cards');

if ($cards) {
	?>
	<section class="flex-cards">
		<div class="container">
			<div class="row">
				<?php
				$count = count($cards);
				foreach ($cards as $key => $card) {
					?>
					<div class="col-12 col-md">
						<div class="card" id="card-<?= $key + 1 ?>">
							<?= ($card['card_image']) ? wp_get_attachment_image( $card['card_image']['ID'], 'card', false, array('class' => 'img-fluid card-img-top') ):''; ?>
							<div class="card-body">
								<h3 class="card-title"><?= $card['card_title']; ?></h3>
								<h5 class="card-title"><?= $card['card_subtitle']; ?></h5>
								<div class="card-text"><?= $card['card_content']; ?></div>
								<?php if ($card['card_action_link']) { ?>
									<a href="<?= $card['card_action_link']; ?>" class="btn btn-primary"><?= $card['card_action_text']; ?></a>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<?php
}
?>
