@extends('layout')

<div class="fondCO">
    <div class="contourImageUtilisateurCO">
        <svg class="imageUtilisateurCO" width="131" height="124" viewBox="0 0 131 124" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M66.6062 59.7311C56.3487 59.7311 47.4665 56.788 40.2092 50.9812C32.9518 45.1754 29.2729 38.0715 29.2729 29.8646C29.2729 21.6606 32.9518 14.5558 40.2104 8.74804C47.4689 2.94313 56.3499 0 66.6062 0C76.8648 0 85.7447 2.94313 93.002 8.74899C100.259 14.5548 103.939 21.6596 103.939 29.8646C103.939 38.0715 100.259 45.1763 93.0008 50.9822C85.7423 56.7871 76.8613 59.7311 66.6062 59.7311V59.7311Z" fill="white"/>
            <path d="M1.28128 95.3489C1.49059 92.9327 1.91394 90.2971 2.53715 87.5138C3.16627 84.7097 3.97632 82.0589 4.94602 79.6361C5.94764 77.1319 7.30995 74.659 8.99391 72.2891C10.7417 69.8294 12.7946 67.6876 15.0983 65.9251C17.5071 64.0813 20.4564 62.5988 23.8669 61.5175C27.2656 60.4419 31.032 59.8969 35.061 59.8969C36.6433 59.8969 38.1735 60.4163 41.1287 61.9555C42.9475 62.9044 45.0749 64.0018 47.4495 65.2156C49.4799 66.2506 52.2305 67.2203 55.628 68.0982C58.9427 68.9562 62.3083 69.3914 65.6301 69.3914C68.9519 69.3914 72.3162 68.9562 75.6345 68.0982C79.0284 67.2212 81.7791 66.2515 83.8071 65.2165C86.1593 64.0141 88.2879 62.9167 90.1338 61.9546C93.0855 60.4154 94.6169 59.896 96.1992 59.896C100.229 59.896 103.995 60.4419 107.392 61.5185C110.8 62.5979 113.751 64.0803 116.162 65.9261C118.464 67.6895 120.518 69.8304 122.264 72.2891C123.947 74.659 125.309 77.131 126.312 79.6371C127.28 82.0599 128.09 84.7097 128.719 87.5138C129.343 90.2933 129.766 92.9299 129.975 95.3518C130.181 97.7244 130.285 100.187 130.285 102.674C130.285 109.147 127.713 114.387 122.641 118.252C117.632 122.065 111.004 124 102.943 124H28.3098C20.2495 124 13.6236 122.066 8.61312 118.252C3.53996 114.39 0.967898 109.149 0.967898 102.673C0.969081 100.175 1.07433 97.7102 1.28128 95.3489V95.3489Z" fill="white"/>
        </svg>
    </div>
    <div>
        <div class="textCO">
            Prénom
        </div>
        <input class="champText" type="text" id="firstName" name="firstName" required
               minlength="1" maxlength="35" size="20">
    </div>
    <div>
        <div class="textCO">
            Nom
        </div>
        <input class="champText" type="text" id="name" name="name" required
               minlength="1" maxlength="35" size="20">
    </div>
    <div>
        <div class="textCO">
            Email
        </div>
        <input class="champText" type="text" id="email" name="email" required
               minlength="1" maxlength="35" size="20">
    </div>
    <div>
        <div class="textCO">
            Nom d'utilisateur
        </div>
        <input class="champText" type="text" id="userName" name="userName" required
               minlength="1" maxlength="35" size="20">
    </div>
    <div>
        <div class="textCO">
            Mot de passe
        </div>
        <input class="champText" type="text" id="mdp" name="mdp" required
               minlength="1" maxlength="35" size="20">
    </div>
    <div>
        <input class="boutonValiderCO" type="submit" value="  Valider  ">
    </div>
    <div class="textCO newuserCO">
        Connection ?
    </div>
</div>
