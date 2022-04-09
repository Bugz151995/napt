<script>
  setTimeout(function() {
    Toastify({
      text: "<?= session()->getTempdata('error')?>",
      gravity: "top",
      position: 'center',
      className: "small",
      style: {
        background: '#dc3545'
      }
    }).showToast();
  }, 0);
</script>