<?php
    include 'admin/db.php';
      $select = "SELECT COUNT(*) as total, id, text_logo, image FROM logo";
      $q = mysqli_query($connection,$select);
      $asc = mysqli_fetch_assoc($q);
      //Aditional Information
      $select = "SELECT COUNT(*) as total, id, h_phone, f_phone, address, email FROM contact_info";
      $q_contact = mysqli_query($connection,$select);
      $asc_cinfo = mysqli_fetch_assoc($q_contact);
      // For banner
      $select = "SELECT COUNT(*) as total, id, heading, summary, image FROM banner";
      $q_banner = mysqli_query($connection,$select);
      $asc_banner = mysqli_fetch_assoc($q_banner);
      // For about
      $select = "SELECT COUNT(*) as total, id, title, summary, image FROM about";
      $q_about = mysqli_query($connection,$select);
      $asc_about = mysqli_fetch_assoc($q_about);
      // For about choose
      $select_aboutch = "SELECT COUNT(*) as total, id, heading FROM about_choose";
      $q_aboutch = mysqli_query($connection,$select_aboutch);
      $asc_aboutch = mysqli_fetch_assoc($q_aboutch);
      $aboutch = "SELECT * FROM about_choose ORDER BY id DESC";
      $aboutch_query = mysqli_query($connection,$aboutch);
      // For service Section
      $select_service = "SELECT COUNT(*) as total, id, title, description, image FROM service";
      $q_service = mysqli_query($connection,$select_service);
      $asc_service = mysqli_fetch_assoc($q_service);
      $service = "SELECT * FROM service ORDER BY id DESC";
      $service_query = mysqli_query($connection,$service);
      // for works section
      $select_works = "SELECT COUNT(*) as total, id, title, image FROM works";
      $q_works = mysqli_query($connection,$select_works);
      $asc_works = mysqli_fetch_assoc($q_works);
      $works = "SELECT * FROM works ORDER BY id DESC";
      $works_query = mysqli_query($connection,$works);
      // form testimonial section
      $select_testimonials = "SELECT COUNT(*) as total, id, author_name, summary, image FROM testimonials";
      $q_testimonials = mysqli_query($connection,$select_testimonials);
      $asc_works = mysqli_fetch_assoc($q_testimonials);
      $testimonials = "SELECT * FROM testimonials ORDER BY id DESC";
      $testimonials_query = mysqli_query($connection,$testimonials);
      //for social_link section
      $select_social = "SELECT COUNT(*) as total, id, name, icon, link FROM social_link";
      $q_social = mysqli_query($connection,$select_social);
      $asc_social = mysqli_fetch_assoc($q_social);
      $social = "SELECT * FROM social_link ORDER BY id DESC";
      $social_query = mysqli_query($connection,$social);

?>