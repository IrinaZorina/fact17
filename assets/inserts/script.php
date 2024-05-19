<script>
  const callButton = document.querySelector('.call-button');
  const phoneNumber = '+79123117230';

  callButton.addEventListener('click', () => {
    callButton.textContent = phoneNumber;
  });
</script>