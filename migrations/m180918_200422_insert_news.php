<?php

use yii\db\Migration;

/**
 * Заполнение таблицы новостей.
 */
class m180918_200422_insert_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $apiUserAuthorId = Yii::$app->db->createCommand("SELECT id FROM user WHERE username = 'api_user'")
            ->queryScalar();
        $this->insert('news', [
            'title' => 'Florence Pushes Away From Carolinas but Rivers Keep Rising',
            'seo' => 'hurricane-florence-live-updates' ,
            'author_id' => $apiUserAuthorId,
            'html' => '<div class="css-18sbwfn StoryBodyCompanionColumn"><div class="css-1h6whtw"><p class="css-1i0edl6 e2kc3sl0">WILMINGTON, N.C. — The remnants of Hurricane Florence threatened more destruction on Tuesday as swollen rivers pushed higher in the Carolinas and flash flood advisories were issued for cities along the storm’s northeast trajectory, including Washington, New York and Boston.</p><p class="css-1i0edl6 e2kc3sl0">Across the Carolinas, residents struggled with the aftermath of a storm that drenched the region with record rainfall, damaged tens of thousands of homes and delivered floodwaters that may not recede for days.</p><p class="css-1i0edl6 e2kc3sl0">In Wilmington, one of North Carolina’s most populous cities, residents lined up by the hundreds Tuesday for free food, water and tarps as the city had been effectively cut off by floodwaters. The authorities in North and South Carolina rescued more people by air and water. Curfews were in effect, and thousands of people remained out of their homes with no certainty of when they would be able to return.</p></div><aside class="css-14jsv4e"></aside></div>',
            'status' => 2,
            'created_at' => 1536962521,
            'updated_at' => 1536962521,
            'date_published' => 1537264800
        ]);
        $this->insert('news', [
            'title' => 'Why Women Can Take Years to Come Forward With Sexual Assault Allegations',
            'seo' => 'why-women-can-take-years' ,
            'author_id' => $apiUserAuthorId,
            'html' => '<div class="css-18sbwfn StoryBodyCompanionColumn"><div class="css-1h6whtw"><p class="css-1i0edl6 e2kc3sl0">She can’t remember exactly what happened. She sent friendly text messages afterward. She didn’t fight back. And, of course, she took decades to come forward.</p><p class="css-1i0edl6 e2kc3sl0">Of the many reasons that women’s accounts of sexual misconduct, from unwanted advances to forced sex acts, are questioned, that last one has come up yet again after a research psychologist named <a class="css-1g7m0tk" href="https://www.nytimes.com/2018/09/17/us/politics/anita-hill-clarence-thomas-brett-kavanaugh-christine-blasey-ford.html" title="">Christine Blasey Ford</a> said that the nominee for the Supreme Court, Judge Brett M. Kavanaugh, sexually assaulted her when they were in high school. He has denied the accusations.</p><p class="css-1i0edl6 e2kc3sl0">But experts say that some of the most commonly raised causes for doubt, like a long delay in reporting or a foggy recall of events, are the very hallmarks of sexual assault.</p><p class="css-1i0edl6 e2kc3sl0">“There’s something really unique about sexual assault in the way we think about it, which is pretty upside down from the way it actually operates,” said Kimberly A. Lonsway, a psychologist who conducts law enforcement training on sexual assault as the research director of End Violence Against Women International. “When there’s something that is characteristic of assault, it causes us to doubt it.”</p></div><aside class="css-14jsv4e"></aside></div>',
            'status' => 2,
            'created_at' => 1533897900,
            'updated_at' => 1533898560,
            'date_published' => 1534327200
        ]);
        $this->insert('news', [
            'title' => 'In Flood-Hit Public Housing, a Reminder That the Poor Bear Brunt of Storms’ Fury',
            'seo' => 'hurricane-florence-new-bern-poor' ,
            'author_id' => $apiUserAuthorId,
            'html' => '<div class="css-1h6whtw"><p class="css-1i0edl6 e2kc3sl0">NEW BERN, N.C. — Before the river rose and the water trespassed into her little public housing unit, ruining her black sectional sofa and her children’s clothes, leaving her walls moist to the touch — indeed, before she even knew that the river could be her enemy — Keisha Monk thought she had found something better than basic shelter at Trent Court.</p><p class="css-1i0edl6 e2kc3sl0">“Trust me,” she said this week, as one of the last rain bands of the storm called Florence fell all around her, “when I first came here, I thought it was heaven.”</p><p class="css-1i0edl6 e2kc3sl0">It was January when Ms. Monk and her four small children moved to this historic pearl of a Southern city and to Trent Court, a downtown cluster of red brick public housing right on the banks of the Trent River. Ms. Monk had been in a family shelter in Columbia, S.C., that ground down her soul, she said. At Trent Court, she could gaze out her front door onto the wide, rippling river. She could take in its breeze, its smell, its changing colors and moods.</p><p class="css-1i0edl6 e2kc3sl0">This week, after a brief evacuation, she returned to Trent Court to find that flooding from Florence had turned her place into a sodden wreck. She also realized that she was now a player in the kind of redevelopment drama that tends to swamp storm-battered places like this — a story of race, class, gentrification and safety fears, and questions without easy answers about who gets to live on often alluring, sometimes treacherous, waterside real estate.</p></div>',
            'status' => 2,
            'created_at' => 1535191200,
            'updated_at' => 1535191200,
            'date_published' => 1535194800
        ]);
        $this->insert('news', [
            'title' => 'Syria accidentally shot down a Russian military plane',
            'seo' => 'syrian-regime-shoots-down-russian-plane' ,
            'author_id' => $apiUserAuthorId,
            'html' => '<div class="zn-body__paragraph speakable">Russian state media said Syrian missiles shot the maritime patrol aircraft down amid an attack by Israeli jets in the Latakia region of northwest Syria.</div>',
            'status' => 2,
            'created_at' => 1536584400,
            'updated_at' => 1536584400,
            'date_published' => 1536586200
        ]);
        $this->insert('news', [
            'title' => 'Trump Sides With Kavanaugh, Accusing Democrats of Timing Sex Assault Charge to Delay Confirmation' ,
            'seo' => 'trump-kavanaugh' ,
            'author_id' => $apiUserAuthorId,
            'html' => '<div class="css-18sbwfn StoryBodyCompanionColumn"><div class="css-1h6whtw"><p class="css-1i0edl6 e2kc3sl0">WASHINGTON — President Trump falsely charged on Tuesday that Democrats had sought to time a sexual assault allegation against his Supreme Court nominee, Judge Brett M. Kavanaugh, to obstruct his confirmation, siding with the judge as he called for a swift process for airing the accusation on Capitol Hill.</p><p class="css-1i0edl6 e2kc3sl0">“I feel so badly for him that he’s going through this,” Mr. Trump said of Judge Kavanaugh, who has been accused by Christine Blasey Ford, a research psychiatrist, of attempted rape at a party in Washington in the 1980s, when both were teenagers. “This is not a man that deserves this.”</p></div><aside class="css-14jsv4e"><span></span></aside></div>',
            'status' => 2,
            'created_at' => 1535886000,
            'updated_at' => 1535886000,
            'date_published' => 1535893200
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->delete('news');
    }
}
