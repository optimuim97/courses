<?php

namespace App\Http\Controllers;

use App\Http\Services\ChoiceService;
use App\Http\Services\QuestionService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddQuestionAndChoicesController extends Controller
{
    public function __construct(private QuestionService $questionService, private ChoiceService $choiceService)
    {
    }

    public function __invoke(Request $request)
    {
        $data = $request->all();
        $questionData = $data["question"];

        $reqQuestion  = $this->questionService->add($questionData);
        $question = json_decode($reqQuestion->getContent(), true)["data"];

        $choiceData = $data['choices'];
        foreach ($choiceData as $item) {
            $item['question_id'] = $question["id"];
            $this->choiceService->add($item);
        }

        return respJson(Response::HTTP_OK, "Ajouté", [
            'question' => $question,
            'choix' => $choiceData
        ]);
    }
}
