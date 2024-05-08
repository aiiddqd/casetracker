up:
	docker compose up -d

down:
	docker compose down

ps:
	docker compose ps


clear-view-cache:
	docker compose exec app php artisan view:clear
