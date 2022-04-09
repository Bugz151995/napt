<script>
  setTimeout(function() {
    Toastify({
      text: "<?= session()->getTempdata('success')?>",
      gravity: "top",
      position: 'center',
      className: "small",
      style: {
        color: 'white',
        background: '#198754'
      }
    }).showToast();
  }, 0);
</script>