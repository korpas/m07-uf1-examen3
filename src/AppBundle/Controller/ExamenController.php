<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ExamenController extends Controller
{
    /**
     * @Route("/examen", name="exindex")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('/examen/index.html.twig');
    }

    /**
     * @Route("/len_form", name="app_examen_len")
     */
    public function lenAction()
    {
        return $this->render('/examen/len.html.twig');
    }

    /**
     * @Route("/do-len", name="app_examen_doLen")
     */
    public function doLenAction(request $request)
    {
        $len = $this->get('app.service.examen');
        $op1 = $request->request->get('op1');
        $len->setOp1($op1);
        $len->lenAction($op1);

        $result = $len->getResult();



        return $this->render(
            ':examen:do-len.html.twig',
            [
                'op1' => $op1,
                'result'=> $result,

                'title' => 'lenght',
            ]
        );
    }
    /**
     * @Route("/con_form", name="app_examen_con")
     */
    public function conAction()
    {
        return $this->render('/examen/con.html.twig');
    }

    /**
     * @Route("/do-con", name="app_examen_doCon")
     */
    public function doConAction(request $request)
    {
        $con = $this->get('app.service.examen');
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $con->setOp1($op1);
        $con->setOp2($op2);
        $con->conAction($op1);

        $result = $con->getResult();



        return $this->render(
            ':examen:do-con.html.twig',
            [
                'op1' => $op1,
                'op2' => $op2,
                'result'=> $result,

                'title' => 'concatenar',
            ]
        );
    }
    /**
     * @Route("/chat_form", name="app_examen_chat")
     */
    public function chatAction()
    {
        return $this->render('/examen/con.html.twig');
    }

    /**
     * @Route("/do-chat", name="app_examen_doChat")
     */
    public function doChatAction(request $request)
    {
        $chat = $this->get('app.service.examen');
        $op1 = $request->request->get('op1');
        $chat->setOp1($op1);
        $chat->chatAction($op1);

        $result = $chat->getResult();



        return $this->render(
            ':examen:do-chat.html.twig',
            [
                'op1' => $op1,

                'result'=> $result,

                'title' => 'posicion',
            ]
        );
    }
    /**
     * @Route("/low_form", name="app_examen_low")
     */
    public function lowAction()
    {
        return $this->render('/examen/low.html.twig');
    }

    /**
     * @Route("/do-low", name="app_examen_doLow")
     */
    public function doLowAction(request $request)
    {
        $low = $this->get('app.service.examen');
        $op1 = $request->request->get('op1');
        $low->setOp1($op1);
        $low->lowAction($op1);

        $result = $low->getResult();



        return $this->render(
            ':examen:do-low.html.twig',
            [
                'op1' => $op1,

                'result'=> $result,

                'title' => 'posicion',
            ]
        );
    }
    /**
     * @Route("/up_form", name="app_examen_up")
     */
    public function upAction()
    {
        return $this->render('/examen/up.html.twig');
    }

    /**
     * @Route("/do-up", name="app_examen_doUp")
     */
    public function doUpAction(request $request)
    {
        $up = $this->get('app.service.examen');
        $op1 = $request->request->get('op1');
        $up->setOp1($op1);
        $up->upAction($op1);

        $result = $up->getResult();



        return $this->render(
            ':examen:do-up.html.twig',
            [
                'op1' => $op1,

                'result'=> $result,

                'title' => 'posicion',
            ]
        );
    }
    /**
     * @Route("/frarray_form", name="app_examen_frarray")
     */
    public function frarrayAction()
    {
        return $this->render('/examen/frarray.html.twig');
    }

    /**
     * @Route("/do-frarray", name="app_examen_doFrarray")
     */
    public function doFrarrayAction(request $request)
    {
        $chat = $this->get('app.service.examen');
        $op1 = $request->request->get('op1');
        $chat->setOp1($op1);
        $chat->chatAction($op1);

        $result = $chat->getResult();



        return $this->render(
            ':examen:do-frarray.html.twig',
            [
                'op1' => $op1,

                'result'=> $result,

                'title' => 'posicion',
            ]
        );
    }
}