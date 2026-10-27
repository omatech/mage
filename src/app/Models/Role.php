<?php

namespace Omatech\Mage\App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

#[\Illuminate\Database\Eloquent\Attributes\Hidden(['pivot'])]
class Role extends SpatieRole
{
}
