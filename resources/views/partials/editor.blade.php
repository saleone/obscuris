<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
tinymce.init(
{
  selector: ".has_editor",
  menubar: false,
    plugins: [
      "lists link image textcolor",
  ],
  formats: {
    forecolor: {inline: 'span', classes: 'forecolor', styles:{color: "%value"}}
  },
  textcolor_map: [
    "0c0934", "Dark Blue", "152845", "Blue", "CACEE8", "Sky Blue", "E5DED8", "Mushy White", "2F0000", "Cherry"
  ],
  toolbar: [
    "undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    "fontsizeselect | forecolor backcolor"
  ]
})
</script>
