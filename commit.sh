echo "📦 Checking for changes in WordPress..."
git status

echo "🔄 Making sure files are synced from Docker..."
# کمی صبر کن تا sync کامل بشه
sleep 3

echo "🚀 Committing and pushing..."
git add wp-content/
git commit -m "WordPress update: $(date '+%Y-%m-%d %H:%M')"
git push origin v0

echo "✅ Changes pushed! Docker is still running for development."