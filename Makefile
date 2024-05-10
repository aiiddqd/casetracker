up:
	docker compose up -d

down:
	docker compose down

ps:
	docker compose ps


s:
	docker compose exec app sh

migrate:
	docker compose exec app php artisan migrate

clear-view-cache:
	docker compose exec app php artisan view:clear

reset-cache:
	docker compose exec app php artisan filament:clear-cached-components
	docker compose exec app php artisan view:clear
