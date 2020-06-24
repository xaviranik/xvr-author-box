<div class="xvr-author-box" id="xvr-author-box">

    <form action="" method="post">

        <div class="form-row">
            <label for="name"><?php _e( 'Name', 'xvr-author-box' ); ?></label>

            <input type="text" id="name" name="name" value="" required>
        </div>

        <div class="form-row">
            <label for="email"><?php _e( 'E-Mail', 'xvr-author-box' ); ?></label>

            <input type="email" id="email" name="email" value="" required>
        </div>

        <div class="form-row">
            <label for="message"><?php _e( 'Message', 'xvr-author-box' ); ?></label>

            <textarea name="message" id="message" required></textarea>
        </div>

        <div class="form-row">

            <?php wp_nonce_field( 'xvr-author-box-form' ); ?>

            <input type="hidden" name="action" value="xvr_author_box_contact">
            <input type="submit" name="send_enquiry" value="<?php esc_attr_e( 'Contact Us', 'xvr-author-box-form' ); ?>">
        </div>

    </form>
</div>