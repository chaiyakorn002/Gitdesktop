<!DOCTYPE html>
<html>
<head><title>google_form_liff</title></head>
 
<body>
 
<script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
 
<script>
 
  async function getUserProfile() {
   const profile = await liff.getProfile()
   window.location.replace(
     `https://docs.google.com/forms/d/e/1FAIpQLSfNl9w3nOSxe5mbK7reTYV321-kqm9aMwBdx5ZZRTCP-kq4JA/viewform?usp=pp_url
      &entry.2053382262=${profile.userId}`
     );
   }
 
  async function main() {
     await liff.init({ liffId: "1655311760-317NPOK8" })
       if (liff.isLoggedIn()) {
         getUserProfile()
       } else {
         liff.login()
       }
   }
   main()
 </script>
 
 </body>
</html>


