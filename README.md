# Filament Permission Plugin

Este package é um plugin para Filament v3, integrando com a biblioteca spatie/laravel-permission, preparado para customizações conforme a lógica de permissões da aplicação.

## Instalação

1. Adicione este package ao seu projeto Laravel (ex: via path repository no composer).
2. Certifique-se de que o `spatie/laravel-permission` está instalado e configurado.
3. Rode as migrations do plugin para adicionar o campo `area` nas tabelas de permissões e roles:

   ```bash
   php artisan migrate --path=packages/FilamentPermission/database/migrations
   ```

4. O ServiceProvider do plugin registra automaticamente os Resources no Filament. Se necessário, adicione manualmente em `config/app.php`.

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
