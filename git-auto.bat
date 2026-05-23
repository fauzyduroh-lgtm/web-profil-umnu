@echo off
echo =========================================
echo 🔄 MEMULAI PROSES UPDATE GITHUB...
echo =========================================

:: 1. Tarik data terbaru dari GitHub biar aman
git pull origin main

:: 2. Masukkan semua perubahan file baru
git add .

:: 3. Commit otomatis dengan pesan ringkas
git commit -m "Update otomatis proyek"

:: 4. Dorong langsung ke GitHub
git push origin main

echo =========================================
echo 🎉 MANTAP JI! KODINGAN SUDAH MASUK GITHUB!
echo =========================================
pause