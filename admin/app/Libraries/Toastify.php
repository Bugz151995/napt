<?php 

namespace App\Libraries;

class Toastify {  
  /**
   * show toast success
   *
   * @return void
   */
  public function success()
  {
    return view('Components/toastify_success');
  }
  
  /**
   * show toast error
   *
   * @return void
   */
  public function error()
  {
    return view('Components/toastify_error');
  }
    
  /**
   * show toast warning
   *
   * @return void
   */
  public function warning()
  {
    return view('Components/toastify_warning');
  }
    
  /**
   * show toast info
   *
   * @return void
   */
  public function info()
  {
    return view('Components/toastify_info');
  }
}