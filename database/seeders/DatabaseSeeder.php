<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Knight',
            'Calvino the cook',
            'Trusted servant',
            'Prince',
            'Princess Zizola',
            'Alchemist',
            'Queen',
            'Prisoner',
            'Merchant',
            'Farmer',
        ];
        $i =1;
        foreach ($roles as $role){
            Role::create([
                'name'=>$role,
                'display_order' =>$i,
                ]);
            $i++;
        }

        $questions = [
            [
                'question' => 'Your highness, our hinterlands were attacked by the Hightower’s army. Do you want to take vengeance and attack their salt depot? ',
                'hint'=>"Salt has played a prominent role in determining the power and location of the world's great cities. Some wars for salt took place in the past.",
                'role_id'=>1,
                'yes'=>663,
                'no'=>337,
            ],
            [
                'question' => 'The Hightower’s King blocks our way to the sea and we’re losing our resource to make salt. For a little payment, a group of mercenaries could help. Would you like to hire them? ',
                'hint'=>'Via Salaria was an ancient roman road used to transport salt from the sea to Rome and other roman cities.',
                'role_id'=>1,
                'yes'=>775,
                'no'=>225,
            ],
            [
                'question' => "Sir, as much as I like my job, I am not comfortable with this amount of salt. If you don't pay me the double I will continue my work in another kingdom. Do you want to pay him the double? ",
                'hint'=>"In Rome... the soldier's pay was originally salt and the word salary derives from it.",
                'role_id'=>1,
                'yes'=>100,
                'no'=>900,
            ],
            [
                'question' => 'Our salt inventories are empty, my Lord. We cannot store our food anymore. Should we keep it anyway?',
                'hint'=>'Salt can be used to conserve food.',
                'role_id'=>2,
                'yes'=>292,
                'no'=>708,
            ],
            [
                'question' => "We don't have enough sugar to cook the dessert for the banquet, I suggest we cook a salty dessert. Do you allow him? ",
                'hint'=>'Some popular desserts like pretzel chocolate chip cookies and salted rose honey pie are made with salt.',
                'role_id'=>2,
                'yes'=>619,
                'no'=>381,
            ],
            [
                'question' => 'Your highness, I am making bread for the banquet, may I ask a barrel of salt?
? Salt for making bread?  Would you give him? ',
                'hint'=>'Salt is used as a seasoning to enhance the taste of food. It makes bland foods such as bread, pasta palatable and it helps to bring out the natural flavours in other foods.',
                'role_id'=>2,
                'yes'=>789,
                'no'=>211,
            ],
            [
                'question' => 'Your majesty, a knight from a kingdom far away is asking for shelter in our walls. It could very well be a spy… Do you want to let him in? ',
                'hint'=>'In ancient kingdoms it was common to send spies to get information on the enemies.',
                'role_id'=>3,
                'yes'=>249,
                'no'=>751,
            ],
            [
                'question' => 'My Lord, there is a manifestation of citizens outside the castle complaining about the heavy tax on salt. Would you like to reduce the salt tax? ',
                'hint'=>'The common salt tax was of such a high value that it caused mass population shifts and exodus, attracted invaders, and caused wars.
',
                'role_id'=>3,
                'yes'=>645,
                'no'=>355,
            ],
            [
                'question' => 'My King, there is a huge protest at Black Square to demonstrate against the new salt tax. Would you like to quit this tax? ',
                'hint'=>'The common salt tax was of such a high value that it caused mass population shifts and exodus, attracted invaders, and caused wars.',
                'role_id'=>3,
                'yes'=>770,
                'no'=>230,
            ],
            [
                'question' => 'I am here to take your beautiful daughter as my bride. My kingdom may not have as much salt as yours, but our love is as rich as it can be. Will you give your daughter away?',
                'hint'=>'In the middle ages the arrangement of marriage was based on monetary worth.',
                'role_id'=>4,
                'yes'=>149,
                'no'=>851,
            ],
            [
                'question' => 'My father, the king of Faraway, sent me to personally invite you to the annual tournament. The price will be a carriage full of premium salt. Would you send your most prestigious knights to the tournament? ',
                'hint'=>'The medieval tournament was a forum for European knights to show their military skills.',
                'role_id'=>4,
                'yes'=>871,
                'no'=>129,
            ],
            [
                'question' => 'Father, you are as dear as salt to me. Do you want to execute her for being so arrogant to you?',
                'hint'=>'There is a folktale from Italo Calvino named “Dear As Salt” where the King orders to kill his daughter because she told him she loves him “as dear as Salt',
                'role_id'=>5,
                'yes'=>1,
                'no'=>999,
            ],
            [
                'question' => 'Daddy, I have only one request for you, can I have some salt as a gift for my birthday?
Would you give it to her?',
                'hint'=>'In the Middle Ages, salt was so expensive it was sometimes referred to as “white gold”',
                'role_id'=>5,
                'yes'=>110,
                'no'=>890,
            ],
            [
                'question' => 'My King, I see death caused by an overconsumption of salt in the future. Would you command the cook to reduce the use of salt?',
                'hint'=>'A high consumption of salt can cause some health diseases such as high blood pressure and heart disease.',
                'role_id'=>6,
                'yes'=>920,
                'no'=>80,
            ],
            [
                'question' => 'Your Majesty, I feel a lot of bad vibes against you I suggest we do a ritual against evil.
Do you accept? ',
                'hint'=>'There are some Mayan rituals for avoiding evil vibes that involve the use of salt.',
                'role_id'=>6,
                'yes'=>410,
                'no'=>590,
            ],
            [
                'question' => 'My lord, I have found this interesting plant to create salt, but I need more gold to continue my research on it. Do you want to give him money to experiment? ',
                'hint'=>'Salt can be obtained from Bamboo.',
                'role_id'=>6,
                'yes'=>805,
                'no'=>195,
            ],

            [
                'question' => 'My love, I think this sea salt might help to cure the people struggling from this weird plague that is spreading in the kingdom. Do you want to give sea salt to the harmed?',
                'hint'=>'Sea salt is recommended to regulate the levels of sugar in the blood.',
                'role_id'=>7,
                'yes'=>934,
                'no'=>66,
            ],
            [
                'question' => 'Oh my dear, you seem tired. Let me make a Dead sea salt bath. A dead sea salt bath? Do you want to try? ',
                'hint'=>'Sea salt baths are known for their therapeutic and healing properties, as well as their ability to ease stress and boost your overall health',
                'role_id'=>7,
                'yes'=>748,
                'no'=>252,
            ],
            [
                'question' => 'Darling, you have been talking all day long. Believe me, gargling with warm salt water can make you feel better. Is it magic? Do you want to try? ',
                'hint'=>'Gargling with salt water, about 1/2 teaspoon dissolved in a cup of warm water, can ease swelling and make a sore, scratchy throat feel better.',
                'role_id'=>7,
                'yes'=>888,
                'no'=>112,
            ],
            [
                'question' => 'Your highness, I regret my sins and would like to meet my newborn. Do you change his penalty in working at the salt-mines for two years?',
                'hint'=>'Until the Industrial revolution salt was often mined by slaves or prisoners.',
                'role_id'=>8,
                'yes'=>317,
                'no'=>683,
            ],
            [
                'question' => 'Your Grace, I have been locked away in the dungeons for 25 years. I have seen a lot of things and could tell you what the guards are talking about your salt warehouse, if you set me free. Will you listen to what he has to say and release him from the dungeon? ',
                'hint'=>'Dungeons are rooms or cells in castles where prisoners were left, especially during the renaissance period',
                'role_id'=>8,
                'yes'=>794,
                'no'=>206,
            ],
            [
                'question' => 'I have been accused of stealing a barrel of salt from the castle’s kitchen, though I never did it! Why would I steal worthless salt? A master thief like me can get anything he wants! Would you like to throw him in the dungeon?',
                'hint'=>'Worthless? No, salt was of high value to the Jews, Greeks, Tamils, Chinese, Hittites and other peoples of antiquity',
                'role_id'=>8,
                'yes'=>816,
                'no'=>184,
            ],
            [
                'question' => 'My lord, I have been traveling along the Salt Route and have the finest salt from a kingdom far away. It is yours for a coach full of gold and a horse to pull it. Would you like to buy it?',
                'hint'=>'In the early years, salt was of high value. Routes to transport salt have existed, some examples are via salaria in Italy and old salt routes in Germany.
',
                'role_id'=>9,
                'yes'=>722,
                'no'=>278,
            ],
            [
                'question' => "I am a traveler and I've just bought this amazing rock salt on the way. I will stay in your land for only 1 night. Would you collect taxes from his salt? ",
                'hint'=>'Cities, states and duchies along the salt roads exacted heavy duties and taxes for the salt passing through their territories.',
                'role_id'=>9,
                'yes'=>818,
                'no'=>182,
            ],
            [
                'question' => 'We have made a long trek and faced a lot of dangers passing through the Salt Route. Would you spend money protecting your people? ',
                'hint'=>'For the most part, however, the historic trade route was somewhat dangerous, since the valuable cargo attracted thieves, bandits, and marauders',
                'role_id'=>9,
                'yes'=>811,
                'no'=>189,
            ],
            [
                'question' => 'My neighbour has scattered salt all over my fields! Now my crops are ruined! Do you want to punish the neighbour for his actions? ',
                'hint'=>'Salt is essential for cooking, but too much salt in soil can ruin crops and render fields useless',
                'role_id'=>10,
                'yes'=>899,
                'no'=>101,
            ],
            [
                'question' => 'Your Grace, our lands become inundated. We need salt-tolerant crop varieties and new farming methods. Would you support your people even though it will cost you a fortune? ',
                'hint'=>'Rising soil salinity is already influencing agricultural production. Salt contamination, which leads to stunted and uneven plant growth.',
                'role_id'=>10,
                'yes'=>902,
                'no'=>98,
            ],
            [
                'question' => 'My Lord, can I just ask for a small amount of salt to give my livestock? Would you like to give away such a precious thing?',
                'hint'=>"Salt plays a key role to keep animals' bodily functions in good order, as well as their general health, production, and breeding capabilities.",
                'role_id'=>10,
                'yes'=>769,
                'no'=>231,
            ],
        ];
        foreach ($questions as $question){
            Question::create($question);
        }
    }
}
