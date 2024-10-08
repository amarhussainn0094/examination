<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>

        <div class="form-group">
          <input type="text" name="email" class="form-control" placeholder="Enter your username" wire:model="email">
          @error('email')
          <font color="red"><small>{{ $message }}</small></font>
          @enderror
        </div><!-- form-group -->
      
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" wire:model="password">
          @error('password')
          <font color="red"><small>{{ $message }}</small></font>
          @enderror
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
   
        <button type="submit" wire:click.prevent="login" class="btn btn-info btn-block"> <i class="fa fa-spinner fa-spin" wire:loading></i> Sign In</button>
        <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
      </div>
    </div>
  

    <script>
      window.addEventListener('swal:modal', event => { 
          swal({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
          });
      });
    </script>
  </div>