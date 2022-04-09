<script>
  setTimeout(function() {
    Toastify({
      text: "<?= session()->getTempdata('info')?>",
      gravity: "top",
      position: 'center',
      className: "small",
      style: {
        color: 'black',
        background: '#0dcaf0'
      }
    }).showToast();
  }, 0);
</script>