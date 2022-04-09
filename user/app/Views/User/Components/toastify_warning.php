<script>
  setTimeout(function() {
    Toastify({
      text: "<?= session()->getTempdata('warning')?>",
      gravity: "top",
      position: 'center',
      className: "small",
      style: {
        color: 'black',
        background: '#ffc107'
      }
    }).showToast();
  }, 0);
</script>