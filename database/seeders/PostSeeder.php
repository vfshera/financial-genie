<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public $titles = [
        "Do you think people are born good singers or can someone learn to be a good singer?",
        "How about you start and work on it gradually.",
        "Want to run a business  in kenya?",
        "Code Block Simple",
        "Do you think the internet would survive without advertising?",
        "How to make a wonderful website in minutes.",
        "How to build Gmail-like UI with React Native [at a Zen temple Koshoji]",
        "How to grow your web development career through freelancing.",
        "Things to consider while planning for retirement",
        "The last item in my shopping list",
    ];
    public $deltas = [
        '{"ops":[{"insert":"\nKnow your speciality"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"Be an expert"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"Have projects"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"\n"},{"attributes":{"italic":true},"insert":"Because you are alive, everything is possible."},{"insert":" - "},{"attributes":{"bold":true},"insert":"Thich Nhat Hanh"},{"attributes":{"blockquote":true},"insert":"\n"},{"insert":"\n"}]}',

        '{"ops":[{"insert":"\nIts Out Get to listen the inspiration story song"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"Information is key in this world, and luckily, people like to share their wealth of knowledge. "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"\n\n"},{"attributes":{"bold":true,"script":"super"},"insert":"Edited this"},{"attributes":{"header":1},"insert":"\n"}]}',

        '{"ops":[{"insert":"Convert all the not done elements into paragraphs if its close - we just open tag paragraph as we have a line here if its open and we dont have a next element, its the end of the document! lets close this damn paragraph\nconst quillEditor = new Quill(editorEl, {"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    modules: {"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"        toolbar: toolbarOptions,"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    },"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    placeholder: \"Lets get started\","},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    theme: \"snow\","},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"});"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"ahahahahhahaa"},{"attributes":{"blockquote":true},"insert":"\n"},{"insert":"\n"}]}',

        '{"ops":[{"insert":"I really love these videos and Im glad you included yourself walking to the temple it was very pretty.\nI can only imagine that the environment creates a great mindset for problem solving. \n"},{"attributes":{"italic":true,"bold":true},"insert":"Thanks for the video!"},{"insert":"\n\nAmazing video, and the environmental aspects are great\nI live out in the mountains here in CR and will code in my backyard now to enjoy the nature"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"listening to the river and the birds and breathing fresh air while I code out projects is simply amazing."},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"\n\nYou are an inspiration to me and Im sure many others. Keep up the great videos!"},{"attributes":{"blockquote":true},"insert":"\n"}]}',
        '{"ops":[{"insert":"\nKnow your speciality"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"Be an expert"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"Have projects"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"\n"},{"attributes":{"italic":true},"insert":"Because you are alive, everything is possible."},{"insert":" - "},{"attributes":{"bold":true},"insert":"Thich Nhat Hanh"},{"attributes":{"blockquote":true},"insert":"\n"},{"insert":"\n"}]}',

        '{"ops":[{"insert":"\nIts Out Get to listen the inspiration story song"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"Information is key in this world, and luckily, people like to share their wealth of knowledge. "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"\n\n"},{"attributes":{"bold":true,"script":"super"},"insert":"Edited this"},{"attributes":{"header":1},"insert":"\n"}]}',

        '{"ops":[{"insert":"Convert all the not done elements into paragraphs if its close - we just open tag paragraph as we have a line here if its open and we dont have a next element, its the end of the document! lets close this damn paragraph\nconst quillEditor = new Quill(editorEl, {"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    modules: {"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"        toolbar: toolbarOptions,"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    },"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    placeholder: \"Lets get started\","},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"    theme: \"snow\","},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"});"},{"attributes":{"code-block":true},"insert":"\n"},{"insert":"ahahahahhahaa"},{"attributes":{"blockquote":true},"insert":"\n"},{"insert":"\n"}]}',

        '{"ops":[{"insert":"I really love these videos and Im glad you included yourself walking to the temple it was very pretty.\nI can only imagine that the environment creates a great mindset for problem solving. \n"},{"attributes":{"italic":true,"bold":true},"insert":"Thanks for the video!"},{"insert":"\n\nAmazing video, and the environmental aspects are great\nI live out in the mountains here in CR and will code in my backyard now to enjoy the nature"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"listening to the river and the birds and breathing fresh air while I code out projects is simply amazing."},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"\n\nYou are an inspiration to me and Im sure many others. Keep up the great videos!"},{"attributes":{"blockquote":true},"insert":"\n"}]}',

        '{"ops":[{"insert":"- TypeScript - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://www.typescriptlang.org/"},{"insert":" "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"- React Native - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://reactnative.dev/"},{"insert":" "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"- React Navigation(v6) - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://reactnavigation.org/"},{"insert":" "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"- Restyle - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://github.com/Shopify/restyle"},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"- React Native Reanimated - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://docs.swmansion.com/react-nati..."},{"insert":" "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"- React Native SVG - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://github.com/react-native-svg/r..."},{"insert":" "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"- React Native Vector Icons - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://github.com/oblador/react-nati..."},{"insert":" "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"- React Native Bottom Sheet - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://github.com/gorhom"},{"insert":" "},{"attributes":{"list":"ordered"},"insert":"\n"},{"insert":"- jotai - "},{"attributes":{"link":"https://www.youtube.com"},"insert":"https://jotai.org/"},{"attributes":{"list":"ordered"},"insert":"\n"}]}',

        '{"ops":[{"insert":" "},{"attributes":{"link":"https://www.youtube.com"},"insert":"00:00"},{"insert":" Intro "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:20"},{"insert":" Heading to Koshoji "},{"attributes":{"link":"https://www.youtube.com"},"insert":"06:56"},{"insert":" Create a new react native project "},{"attributes":{"link":"https://www.youtube.com"},"insert":"07:15"},{"insert":" Install dependencies "},{"attributes":{"link":"https://www.youtube.com"},"insert":"10:15"},{"insert":" Configure the project "},{"attributes":{"link":"https://www.youtube.com"},"insert":"17:45"},{"insert":" Integrate React Navigation "},{"attributes":{"link":"https://www.youtube.com"},"insert":"19:48"},{"insert":" Add main screen and sidebar "},{"attributes":{"link":"https://www.youtube.com"},"insert":"25:34"},{"insert":" Add types to navigator "},{"attributes":{"link":"https://www.youtube.com"},"insert":"26:51"},{"insert":" Add basic atoms and light theme "},{"attributes":{"link":"https://www.youtube.com"},"insert":"34:19"},{"insert":" Style the sidebar with the theme "},{"attributes":{"link":"https://www.youtube.com"},"insert":"35:57"},{"insert":" Make fixtures "},{"attributes":{"link":"https://www.youtube.com"},"insert":"39:38"},{"insert":" Container component "},{"attributes":{"link":"https://www.youtube.com"},"insert":"41:40"},{"insert":" Note list "},{"attributes":{"link":"https://www.youtube.com"},"insert":"47:15"},{"insert":" Header bar "},{"attributes":{"link":"https://www.youtube.com"},"insert":"53:24"},{"insert":" Add vector icons "},{"attributes":{"link":"https://www.youtube.com"},"insert":"58:26"},{"attributes":{"bold":true},"insert":" Touchable"},{"insert":" (Button) "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:07:55"},{"insert":" Add"},{"attributes":{"italic":true},"insert":" press handler to "},{"insert":"sidebar "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:09:39"},{"insert":" Prepare making header sticky "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:12:02"},{"insert":" Sticky header "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:19:22"},{"insert":" Implement snapping "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:21:14"},{"insert":" Status bar "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:24:20"},{"insert":" Swipeable View "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:33:34"},{"insert":" Note list swipe action "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:42:06"},{"insert":" Bottom sheet "},{"attributes":{"link":"https://www.youtube.com"},"insert":"01:54:28"},{"insert":" Notebook list "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:01:37"},{"insert":" Add Inkdrop logo "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:05:39"},{"insert":" Add notebook list to the bottom sheet "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:07:17"},{"insert":" Detail screen "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:10:29"},{"insert":" Dark theme "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:14:47"},{"insert":" Time-up! Let go home "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:15:15"},{"insert":" Fix a TS error in theme "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:15:36"},{"insert":" Theme picker "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:26:51"},{"insert":" "},{"attributes":{"strike":true},"insert":"More themes"},{"insert":" "},{"attributes":{"link":"https://www.youtube.com"},"insert":"02:29:24"},{"insert":" Thanks for watching\n"}]}',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->deltas as $key => $delta) {

            $lexer = new \nadar\quill\Lexer($delta);

            $html = '<article class="post">' . $lexer->render() . '</article>';

            echo "Key : {$key} \n";

            Post::create([
                'title' => $this->titles[$key],
                'slug' => $this->titles[$key],
                'user_id' => 1,
                'richtext' => $delta,
                'content' => $html,
            ]);
        }
    }
}