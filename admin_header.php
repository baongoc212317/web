<header class="header">

   <section class="flex">

      <a href="../admin/dashboard.php" class="logo">Admin<span>BeeBook</span></a>

      <nav class="navbar">
         <a href="../admin/dashboard.php">Trang chủ</a>
         <a href="../admin/products.php">Sản phẩm</a>
         <a href="../admin/placed_orders.php">Đơn hàng</a>
         <a href="../admin/admin_accounts.php">Admins</a>
         <a href="../admin/users_accounts.php">Users</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">Cập nhật tài khoản</a>
         <a href="../admin/register_admin.php" class="btn">Đăng ký tài khoản Admin</a>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('Bạn muốn đăng xuất?');">Đăng xuất</a> 
      </div>

   </section>

</header>