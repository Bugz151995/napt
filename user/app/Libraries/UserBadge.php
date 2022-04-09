<?php 

namespace App\Libraries;

class UserBadge {  
  /**
   * show novice badge
   *
   * @return void
   */
  public function novice()
  {
    return view('Components/badge_novice');
  }
  
  /**
   * show advance badge
   *
   * @return void
   */
  public function advance()
  {
    return view('Components/badge_advance');
  }
    
  /**
   * show expert badge
   *
   * @return void
   */
  public function expert()
  {
    return view('Components/badge_expert');
  }

  /**
   * show unverified account badge
   *
   * @return void
   */
  public function unverified()
  {
    return view('Components/badge_unverified');
  }
}