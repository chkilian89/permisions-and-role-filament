# Filament Permission Plugin

Este package é um plugin para Filament v3, integrando com a biblioteca spatie/laravel-permission, preparado para customizações conforme a lógica de permissões da aplicação.

## Instalação

1. Instale o pacote via Composer:

   ```bash
   composer require chkilian89/permisions-and-role-filament:dev-main
   ```

2. Certifique-se de que o `spatie/laravel-permission` está instalado e configurado.

3. Rode as migrations do plugin para adicionar o campo `area` nas tabelas de permissões e roles:

   ```bash
   php artisan migrate
   ```

4. **Registre os Resources no seu Panel Provider** (ex: `app/Providers/Filament/AdminPanelProvider.php`):

   ```php
   use FilamentPermission\Filament\Resources\UserResource;
   use FilamentPermission\Filament\Resources\RoleResource;
   use FilamentPermission\Filament\Resources\PermissionResource;

   public function panel(Panel $panel): Panel
   {
       return $panel
           // ... outras configurações
           ->resources([
               UserResource::class,
               RoleResource::class,
               PermissionResource::class,
           ]);
   }
   ```

   **Ou use auto-discovery** (recomendado):
   
   ```php
   ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
   ```

## Funcionalidades

- CRUD de Permissões, com campo de área e filtro por área
- CRUD de Roles, com campo de área, filtro por área e atribuição de permissões
- CRUD de Usuários, com select para atribuição de roles
- Separação de permissões por área

## Customização

- Adapte os Resources conforme sua lógica de negócio
- Integre policies e services customizados conforme necessário

## Estrutura

- `src/Filament/Resources/PermissionResource.php`: Gerenciamento de permissões
- `src/Filament/Resources/RoleResource.php`: Gerenciamento de roles e atribuição de permissões
- `src/Filament/Resources/UserResource.php`: Gerenciamento de usuários e atribuição de roles

---

Este README será atualizado conforme o desenvolvimento do plugin.
