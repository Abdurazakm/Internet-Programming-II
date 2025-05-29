<?php
// bcrypt: Uses the Blowfish cipher, generating a 60-character hash. It includes built-in salting and adjustable 
// cost (work factor), slowing down brute-force attempts.
$password = "mypassword";
$bcryptHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 
10]);
echo $bcryptHash."\n";
// argon2: A newer, memory-hard algorithm designed to resist both brute-force and GPU-based attacks. PHP 
// supports PASSWORD_ARGON2I and PASSWORD_ARGON2ID.
// PASSWORD_ARGON2I is optimized for speed, while PASSWORD_ARGON2ID is more resistant to side-channel attacks.
// It allows for configuration of memory cost, time cost, and parallelism (threads).
$argonHash = password_hash($password, PASSWORD_ARGON2ID, 
['memory_cost' => 1<<12, 'time_cost' => 4, 'threads' => 2]);
echo $argonHash;