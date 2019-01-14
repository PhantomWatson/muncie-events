<h1 class="page_title">
    <?php echo $title_for_layout; ?>
</h1>

<div class="content_box">
	<?php
        echo $this->Form->create('User', array('url' => array(
            'controller' => 'users',
            'action' => 'reset_password',
            $user_id,
            $reset_password_hash
        )));
        echo $this->Form->input('new_password', array(
            'label' => 'New Password',
            'type' => 'password',
            'autocomplete' => 'off',
            'between' => '<br />'
        ));
        echo $this->Form->input('confirm_password', array(
            'label' => 'Confirm Password',
            'type' => 'password',
            'autocomplete' => 'off',
            'between' => '<br />'
        ));
        echo $this->Form->submit('Reset password', array('class' => 'btn'));
        echo $this->Form->end();
    ?>
</div>
