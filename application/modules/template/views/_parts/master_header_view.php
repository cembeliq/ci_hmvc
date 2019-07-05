<div>
  <header class="s24-bar text-color-white bg-color-black p-a">
  
    <!-- Put your brand here -->
    <div class="s24-bar__brand">
      <div style="max-width: 200px;">
        <a href="#"><img src="<?php echo base_url().'assets/images/logo.png'; ?>"></a>
      </div>
    </div>

    <!-- Put anything that you like it to be collapsed in mobile view here -->
    <div class="s24-bar__collapse" id="collapse-1">
      <nav role="navigation">
        <ul class="s24-list s24-list--visual-collapsible">
          <li class="s24-list__item"><a class="s24-link s24-link--effect-alpha" href="<?=base_url().'home'?>">Home</a></li>
          <li class="s24-list__item"><a class="s24-link s24-link--effect-alpha" href="<?=base_url().'province'?>">Province</a></li>
          <li class="s24-list__item"><a class="s24-link s24-link--effect-alpha" href="<?=base_url().'district'?>">District</a></li>
          
        </ul>
      </nav>
    </div>

    <!-- Put any utility content here, such as social icons -->
    <div class="s24-bar__utilities">
      <ul class="s24-list">
        <li class="s24-list__item"><a class="s24-link s24-link--effect-alpha" href="#" role="button"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li class="s24-list__item"><a class="s24-link s24-link--effect-alpha" href="#" role="button"><i class="fa fa-twitter fa-fw"></i></a></li>
      </ul>
    </div>

    <!-- Put your toggle button here, the button which toggles the `s24-bar__collapse` element -->
    <div class="s24-bar__toggle">
      <a class="s24-js-toggle s24-link s24-link--effect-alpha" href="#" data-target="#collapse-1"><i class="fa fa-bars fa-fw"></i></a>
    </div>
  
  </header>
  

</div>