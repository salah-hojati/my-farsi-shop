#!/bin/bash
echo "🔄 Pulling latest changes..."
git pull origin v0

echo "🐳 Restarting containers..."
docker-compose -f docker-compose.prod.yml down
docker-compose -f docker-compose.prod.yml up -d
echo "✅ Deployment completed!"