<script>
  setTimeout(function() {
    Toastify({
      text: "<?= session()->getTempdata('warning')?>",
      gravity: "top",
      position: 'right',
      className: "small",
      style: {
        background: 'linear-gradient(to right, #BF3836, #FCAFAE)'
      }
    }).showToast();
  }, 0);
</script>