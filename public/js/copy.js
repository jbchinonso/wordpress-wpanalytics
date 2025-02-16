function copyCode() {
  /* Get the text field */
  const copyText = document.getElementById("copy-text");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied to clipboard:" + copyText.value);
}