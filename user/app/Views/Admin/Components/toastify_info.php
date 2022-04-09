<script>
  setTimeout(function() {
    Toastify({
      text: "<?= session()->getTempdata('info')?>",
      gravity: "top",
      position: 'right',
      className: "small",
      style: {
        color: 'black',
        background: 'linear-gradient(to right, #10A8B3, #89EEF5)'
      }
    }).showToast();
  }, 0);
</script>