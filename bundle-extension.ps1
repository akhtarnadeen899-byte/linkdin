# Zip script for Chrome Web Store bundle
$source = "c:\Users\Dell\Desktop\linkdin\nadeem-va-manager"
$destination = "c:\Users\Dell\Desktop\linkdin\nadeem-va-extension.zip"

# Exclude dev-only files
$exclude = @("node_modules", "src", "public", ".git", "package-lock.json", "package.json", "vite.config.js", "nadeem-va-manager.php", "includes")

Compress-Archive -Path "$source\*" -DestinationPath $destination -Force -Exclude $exclude
Write-Host "Extension bundle created at: $destination"
