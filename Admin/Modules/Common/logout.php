<?php
 $user = new taikhoan();
 $user->r->set_logout();
 $user->h->redirect($user->h->get_url('tv/admin/?m=common&a=login'));
?>